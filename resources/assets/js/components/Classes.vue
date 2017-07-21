<template>
        <!-- <div class="checkbox">
            <label v-for="t in turmas">
                <input type="checkbox" name="optionsCheckboxes">
                {{ t.nome }}  -  {{ t.turno }}
            </label>
        </div> -->
        <div class="card">
            <div class="card-header" data-background-color="green">
                <h4 class="title">{{ title }}</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Turno</th>
                    </thead>
                    <tbody>
                        <tr v-for="t in turmas">
                            <td>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes">
                                    </label>
                                </div>
                            </td>
                            <td>
                                {{ t.nome }}
                            </td>
                            <td>
                                {{ t.turno }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</template>

<script>
    export default {
        
        data: function() {
            return {
                title: 'Turmas do próximo semestre',
                turmas: [
                    { nome: 'nomeTeste', turno: 'turnoTeste' }
                ]
            }
        },
        mounted: function() {
            
        },
        methods: {
          
        }
    }
</script>
