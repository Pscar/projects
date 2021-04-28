import axiosInstance from './axios';

export const getAll = () => {
    return axiosInstance.get("/sales")
}
export const createSale = sales => {
    return axiosInstance.post("/sales/create", sales)
}

export default {
    getAll,
    createSale
};
