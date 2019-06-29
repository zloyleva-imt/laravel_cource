<template>

    <div>

        <div class="row my-2">
            <form class="form-inline my-2 my-lg-0 col-12">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        <div class="row">

            <div class="col-12">
                <a :href="routes.productsCreate" class="btn btn-success">Create</a>
            </div>


            <div class="col-6 my-2" v-for="product in products.data">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ product.name }}</h5>
                        <p class="card-text">
                            {{ product.description }}
                        </p>
                        <div class="d-flex justify-content-end">
                            <!--<a href="{{ route('products.show',['id' => $product->id]) }}" class="btn btn-primary mr-2">Show more</a>-->
                            <a :href="`${routes.productsIndex}/${product.id}`" class="btn btn-primary mr-2">Show more</a>
                            <!--<a href="{{ route('products.edit',['id' => $product->id]) }}" class="btn btn-warning mr-2">Edit</a>-->
                            <!--<form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">-->
                                <!--<input type="hidden" name="_method" value="DELETE">-->
                                <!--@csrf-->
                                <!--<button class="btn btn-danger">Delete</button>-->
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-12">
                <!--{{ $products->appends($params)->links() }}-->
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        name: "Catalog",
        props:{
            routes:{
                type: Object,
                require: true
            },
            products:{
                type: Object,
                require: true
            }
        }
    }
</script>

<style scoped>

</style>