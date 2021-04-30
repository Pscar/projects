import axiosInstance from './axios';

export const getAll = () => {
    return axiosInstance.get("/sales")
}
export const create = data => {
    return axiosInstance.post("/sales/create", data)
}
export const update = (id, data) => {
    return axiosInstance.put(`/update/${id}`, data);
  }
export const remove = id => {
    return axiosInstance.delete(`/delete/${id}`);
};

export default {
    getAll,
    create,
    update,
    remove
};
