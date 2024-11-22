import { defineStore } from 'pinia'
import { useToast } from "vue-toastification"

//define the toast
const toast = useToast()

export const useCartStore = defineStore('cart', {
    state: () => ({ 
        cartItems: [],
        validCoupon: {
            name: '',
            discount: 0
        },
        uniqueHash: ''
    }),
    persist: true,
    actions: {
        addToCart(item) {
            let index = this.cartItems.findIndex(product => product.product_id === item.product_id 
                && product.color === item.color && product.size === item.size
            )
            //if the product exists
            if(index !== -1) {
                toast.info("Producto ya en tu carrito", {
                    timeout: 2000
                })
            }else {
                this.cartItems.push(item)
                toast.success("Producto añadido a tu carrito", {
                    timeout: 2000
                })
            }
        },
        incrementQty(item) {
            let index = this.cartItems.findIndex(product => product.product_id === item.product_id 
                && product.color === item.color && product.size === item.size
            )
            //if the product exists
            if(index !== -1) {
                if(this.cartItems[index].qty === item.maxQty) {
                    toast.info(`Only ${item.qty} available`, {
                        timeout: 2000
                    })
                }else {
                    this.cartItems[index].qty += 1
                }
            }
        },
        decrementQty(item) {
            let index = this.cartItems.findIndex(product => product.product_id === item.product_id 
                && product.color === item.color && product.size === item.size
            )
            //if the product exists
            if(index !== -1) {
                this.cartItems[index].qty -= 1
                if(this.cartItems[index].qty === 0) {
                    this.cartItems = this.cartItems.filter(product => product.ref !== item.ref)
                }
            }
        },
        removeFromCart(item) {
            this.cartItems = this.cartItems.filter(product => product.ref !== item.ref)
            toast.success("Producto eliminado de su carrito", {
                timeout: 2000
            })
        },
        clearCartItems() {
            this.cartItems = []
        },
        setValidCoupon(coupon) {
            this.validCoupon = coupon
        },
        addCouponToCartItem(coupon_id) {
            this.cartItems = this.cartItems.map(item => {
                return {...item, coupon_id}
            })
        },
        setUniqueHash(hash) {
            this.uniqueHash = hash
        }
    }
})