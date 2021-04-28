import React, { useReducer, useState } from 'react';
import SaleReducer from '../reducer/SaleReducer';
import Saleapi from '../Api/Saleapi';
const initialState = {
    sales: []
}

export const SaleContext = React.createContext(initialState);

export const SaleProvider = ({ children }) => {
    const [state, dispatch] = useReducer(SaleReducer, initialState);
    const [loading, setLoading] = useState(true);


    function createSale(sales) {
        Saleapi.createSale(sales)
            .then(response => {
                dispatch({
                    type: 'CREATE_SALE',
                    payload: response.sales
                });
            }).catch(error => {
                console.log(error)
            });
    }

    return (
        <SaleContext.Provider value={{ sales: state.sales, createSale }}>
            {children}
        </SaleContext.Provider>
    )
}


