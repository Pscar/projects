import axiosInstance from './axios';

export const getAll = () => {
    return axiosInstance.get("/sales")
}
export const create = data => {
    return axiosInstance.post("/sales/create", data)
}
export const remove = id => {
    return axiosInstance.delete(`/delete/${id}`);
};

export default {
    getAll,
    create,
    remove
};
