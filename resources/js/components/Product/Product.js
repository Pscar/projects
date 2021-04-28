import React from 'react';
import { ProductContext } from '../../store/ProductContext';
import ProductList from '../Product/ProductList';

const Product = () => {
    const { products, loading } = React.useContext(ProductContext);

    if (loading) {
        return (
            <p>Loading</p>
        )
    }
    if (product.length < 1) {
        return (
            <p>No Products matched your search criteria</p>
        )
    }

    return (
        <div className="container">
            <table className="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">info</th>
                        <th scope="col">glass</th>
                    </tr>
                </thead>
                {products.map((item) => {
                    return <ProductList key={item.id} {...item} />
                })}
            </table>
        </div>
    )
}

export default Product
{/* <table className="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>

                {
                    product.map((item) => (
                        <ProductList item={item} key={item.id} />
                    ))
                }

            </table> */}
