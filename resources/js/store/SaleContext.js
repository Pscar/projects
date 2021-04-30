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

    const createSale = (sales) => {
        Saleapi.create(sales)
            .then(response => {
                dispatch({
                    type: 'CREATE_SALE',
                    payload: response.data
                });
            })
            .catch(error => {
                console.log(error)
            });
    }
    // const editSale = () => {
    //     Saleapi.update()
    //         .then(response => {
    //             dispatch({
    //                 type: 'EDIT_SALE',
    //                 payload: response.data
    //             });
    //         })
    //         .catch(e => {
    //             console.log(e);
    //         });
    // }

    const removeSale = (id) => {
        Saleapi.remove(id)
        dispatch({ type: 'REMOVE_SALE', payload: id })
    }

    useEffect(() => {
        const fetchData = async () => {
            const result = await Saleapi.getAll();
            dispatch({
                type: 'FETCH_SUCCESS', payload: result.data
            });
        };
        fetchData();
    }, [])

    return (
        <SaleContext.Provider value={{ sales: state.sales, createSale, removeSale }}>
            {children}
        </SaleContext.Provider>
    )
}
