import React, { useState, useEffect } from 'react';
import axios from 'axios';

const url = 'http://localhost:8000/api/products';
export const ProductContext = React.createContext();

export const ProductProvider = ({ children }) => {
    const [products, setProduct] = useState([]);
    const [loading, setLoading] = useState(true);

    const fetchData = React.useCallback(async () => {
        setLoading(true)
        try {
            const response = await fetch(`${url}`)
            const data = await response.json()
            console.log(data);
            setProduct(data);
            setLoading(false)
        } catch (err) {
            console.log(error)
            setLoading(false)
        }
    }, [])

    useEffect(() => {
        fetchData();
    }, [])

    return (
        <ProductContext.Provider value={{ loading, products }}>
            {children}
        </ProductContext.Provider>
    )
}

