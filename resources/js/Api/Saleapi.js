import axiosInstance from './axios';

export const getAll = () => {
    return axiosInstance.get("/sales")
}
export const create = data => {
    return axiosInstance.post("/sales/create", data)
}

export default {
    getAll,
    create
};
