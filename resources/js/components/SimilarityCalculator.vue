<template>
    <form @submit.prevent="onFormSubmit">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body">
                        <label for="textA"> Teks A</label>
                        <textarea
                            v-model="textA"
                            class="form-control form-control-sm"
                            placeholder="Teks A"
                            name="textA"
                            id="textA"
                            cols="30"
                            rows="10"
                        ></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <label for="textB"> Teks B</label>
                        <textarea
                            v-model="textB"
                            class="form-control form-control-sm"
                            placeholder="Teks B"
                            name="textB"
                            id="textB"
                            cols="30"
                            rows="10"
                        ></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="progress mt-5">
            <div class="progress-bar bg-primary"
                 role="progressbar"
                 :style="{
                    width: `${this.similarity || 0}%`
                 }"
                 :aria-valuenow="this.similarity || 0"
                 aria-valuemin="0"
                 aria-valuemax="100">Similaritas
            </div>
        </div>
    </form>
</template>

<script>
    import { debounce } from 'lodash'

    export default {
        data() {
            return {
                textA: null,
                textB: null,
                similarity: null,
            }
        },

        watch: {
            textA() {
                this.updateSimilarity()
            },

            textB() {
                this.updateSimilarity()
            }
        },

        methods: {
            sendRequest: debounce(function () {
                axios.post("/", {
                    'textA': this.textA,
                    'textB': this.textB,
                }).then(response => {
                    this.similarity = response.data.similarity * 100
                }).catch(error => {
                    console.log(error)
                })
            }, 400),

            updateSimilarity() {
                if (!this.textA || !this.textB) {
                    return
                }

                this.sendRequest()
            }
        }
    }
</script>
