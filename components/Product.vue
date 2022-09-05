<template>
       <div class="col-md-3 agileinfo_new_products_grid">
					<div  :class="cssVars" >
						<div class="hs-wrapper hs-wrapper1">
						   
                            <img v-for="item in shirt.images" :key="item.message" :src="'site/images/products/'+item.image"  alt="" class="img-responsive">
                           
                       
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">{{ shirt.name }}</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>{{ shirt.purchase_price }}</span> <i class="item_price">{{ shirt.sale_price }}</i></p>
							<p>
                              <button @click="addToCart"  class="item_add">
                               Add to Cart
                              </button>
                            </p>
						</div>
					</div>
				  </div>
</template>

<script>
    export default {
        props:['shirt','lang'],
        computed:{
            cssVars(){
            return "agile_ecommerce_tab_"+this.lang+ ' ' +'agileinfo_new_products_grid1';

            }
        },
        mounted() {
            console.log(this.lang)
        },
        methods:{
            addToCart(){
                bus.$emit('added-to-cart',this.shirt);
            },
            addToCompare(){
                bus.$emit('added-to-compare',this.shirt);
            },
            htmlToText(html) {
                var tag = document.createElement('div');
                tag.innerHTML = html;

                return tag.innerText;
            }
        }
    }
</script>
