import axios from "axios";

export class PokemonService {
    static serverUrl = import.meta.env.VITE_BASE_URL;
    static getPokemons(){
        let url = "https://pokeapi.co/api/v2/ability/?limit=5";
        return axios.get(url);
    }

    static getPokemonByName(id){
        let url = `${this.serverUrl}/pokemon/${id}`;
        return axios.get(url, id);
    }


}
