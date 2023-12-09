import axios from "axios";

console.log(import.meta.env.VITE_APP_URL)
const axiosInstance = axios.create({
    baseURL:import.meta.env.VITE_APP_URL
})

class Api {
    async getWorks() {
        const {data,status}= await axiosInstance.get("/works")

        return data.data;
    }
}
export default new Api();