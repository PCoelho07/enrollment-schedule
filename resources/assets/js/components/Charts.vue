<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Okay </div>

                    <div class="panel-body">
                       Yes motherfucker
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    Vue.config.delimiters = ['@{', '}']
    export default {
        data: function() {
            return {
                title: 'Ola mundo!'            
            }
        },
        methods: {
            teste: function() {
                console.log('testando...')
            }
        }
    }
</script>
