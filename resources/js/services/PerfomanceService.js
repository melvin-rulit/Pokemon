import axios from "axios";

export class PerfomanceService {
    static serverUrl = import.meta.env.VITE_BASE_URL;

    static getPerfomances(){
        let url = `${this.serverUrl}/perfomance`;
        return axios.get(url);
    }

    static getPerfomanceById(id){
        let url = `${this.serverUrl}/perfomance/${id}`;
        return axios.get(url, id);
    }

    static update(perfomance){
        let url = `${this.serverUrl}/api/updatePerfomance/${perfomance}`;
        return axios.put(url, perfomance);
    }

}
