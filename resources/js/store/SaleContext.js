import React, { useReducer, useState, useEffect } from 'react';
import { SaleReducer, initialState } from '../reducer/SaleReducer';
import Saleapi from '../Api/Saleapi';
import axios from 'axios';

export const SaleContext = React.createContext();

export const SaleProvider = ({ children }) => {
    const [state, dispatch] = useReducer(SaleReducer, initialState);

    function createSale(sales) {
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



        // dispatch({
        //     type: 'CREATE_SALE',
        //     payload: sales
        // })
