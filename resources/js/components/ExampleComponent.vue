<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        {!! firstname !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      
            data() {

                return {
                    details:{

                    firstname:"Krishna",
                    lastname:"Chavda"
                }
            };
            
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


        