import "./bootstrap";
import axios from "axios";

// Buat instance Axios
const axiosInstance = axios.create({
    baseURL: "http://localhost:8000",
});

// Buat permintaan AJAX
axiosInstance.get("/api/orders").then((response) => {
    // Handle the response
});
