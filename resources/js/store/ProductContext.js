import React, { useState, useEffect } from 'react';
import axios from 'axios';

const url = 'https://www.thecocktaildb.com/api/json/v1/1/search.php?s=';
export const ProductContext = React.createContext();

export const ProductProvider = ({ children }) => {
    const [products, setProduct] = useState([]);
    const [loading, setLoading] = useState(true);
    const [searchTerm, setSearchTerm] = useState('')

    const fetchData = React.useCallback(async () => {
        setLoading(true)
        try {
            const response = await fetch(`${url}${searchTerm}`)
            const data = await response.json()
            console.log(data);

            const { drinks } = data;
            if (drinks) {
                const newProduct = drinks.map((item) => {
                    const { // ดึงค่าที่ต้องการจะใช้งาน จาก api
                        idDrink,
                        strDrink,
                        strDrinkThumb,
                        strAlcoholic,
                        strGlass,
                        strInstructions
                    } = item

                    return { // รับค่าจาก api
                        id: idDrink,
                        name: strDrink,
                        image: strDrinkThumb,
                        info: strAlcoholic,
                        glass: strGlass,
                        ins: strInstructions
                    }
                })
                setProduct(newProduct)
            } else {
                setProduct([])
            }
            setLoading(false)
        } catch (err) {
            console.log(error)
            setLoading(false)
        }
    }, [searchTerm])

    useEffect(() => {
        fetchData()
    }, [searchTerm, fetchData])

    return (
        <ProductContext.Provider value={{ loading, products, searchTerm, setSearchTerm }}>
            {children}
        </ProductContext.Provider>
    )
}

