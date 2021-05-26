<template>
    <div class='add-form'> 
        <form v-on:submit="submitHandler">
            <input v-model="name" type="text" placeholder="Name"/>
            <input v-model="brewery" type="text" placeholder="Brewery"/>
            <input v-model="image" type="text" placeholder="Image"/>
            <select v-on:change="styleHandler" name="Style" id="Style">
                <option disabled selected value="">Style</option>
                <option value="Lager">Lager</option>
                <option value="Ale">Ale</option>
                <option value="IPA">IPA</option>
                <option value="Sour">Sour</option>
                <option value="Stout">Stout</option>
            </select>
            <input v-model="abv" type="text" placeholder="ABV"/>
            <input v-model="description" type="text" placeholder="Description"/>
            <input v-model="tasting_notes" type="text" placeholder="Tasting Notes"/>
            <input v-model="recommended_drinking" type="text" placeholder="Recommended Drinking"/>
            <input type="submit" />
        </form>
    </div>
</template>

<script>
export default {
    name: 'addbeer',
    data() {
        return {
            name: '',
            brewery: '',
            image: '',
            style: '',
            abv: '',
            description: '',
            tasting_notes: '',
            recommended_drinking: ''
        }
    },
    methods: {
        styleHandler(e) {
            this.style = e.target.value
        },
        submitHandler(e) {
            e.preventDefault();
            let newBeer = {
                name: this.name,
                brewery: this.brewery,
                img_url: this.image,
                style: this.style,
                abv: this.abv,
                description: this.description,
                tasting_notes: this.tasting_notes,
                recommended_drinking: this.recommended_drinking
            }
            console.log(newBeer)
        }
    }
}
</script>

<style scoped>
    .add-form{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>