import React, { useReducer, useEffect } from 'react';
import { SaleReducer } from '../reducer/SaleReducer';
import Saleapi from '../Api/Saleapi';


export const SaleContext = React.createContext();

const initialState = {
    loading: false,
    sales: [],
    total: 0,
    amount: 0,
}

export const SaleProvider = ({ children }) => {
    const [state, dispatch] = useReducer(SaleReducer, initialState);
    console.log("🚀 ~ file: SaleContext.js ~ line 9 ~ SaleProvider ~ state", state)

    function createSale(sales) {
        dispatch({ type: 'LOADING' })
        Saleapi.create(sales)
            .then(response => {
                dispatch({
                    type: 'CREATE_SALE',
                    payload: response.sales
                });
            })
            .catch(error => {
                console.log(error)
            });
    }

    function FetchData() {
        dispatch({ type: 'LOADING' })
        Saleapi.getAll()
            .then(response => {
                dispatch({
                    type: 'FETCH_SUCCESS', payload: response.data
                });
            })
            .catch(e => {
                console.log(e);
            });
    }
    useEffect(() => {
        FetchData();
    }, [])

    return (
        <SaleContext.Provider value={{ sales: state.sales, createSale }}>
            {children}
        </SaleContext.Provider>
    )
}
