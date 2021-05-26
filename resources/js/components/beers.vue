<template>
    <div>
        Beers Vue
        <div class='beers' v-if="beers.length != 0">
            <div class='beer-cards' v-for="beer in beers" :key="beer.id">
                <div>
                    <img class='image' :src="beer.img_url"  :alt="beer.name" />
                </div>
                <div class='card-info'>
                    <h4>{{ beer.name }}</h4>
                    <h5>{{ beer.brewery}}</h5>
                    <p>{{ beer.style }} - {{ beer.abv }}%</p>        
                    <router-link :to="{ name: 'beerpage', params: { id: beer.id } }"> 
                        <button>More Info</button>
                    </router-link>
                </div>
            </div>
        </div>
        <router-link :to="{ name: 'addbeer' }"> 
            <button>Add Beer</button>
        </router-link>
    </div>
</template>

<script>
export default {
    name: 'Beers',
    props: ["beers"]
}
</script>

<style>
    .beers{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }
    .header{
        text-align: center;
        margin-bottom: 10px;
    }
    .beer-cards{
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          height: 350px;
          width: 300px;
          margin-top: 5px;
          margin-right: 5px;
          margin-bottom: 5px;
    }
    .image{
        display: block;
        margin: auto;
        text-align: center;
        width: 115px;
    }
    .card-info{
        text-align: center;
    }
</style>