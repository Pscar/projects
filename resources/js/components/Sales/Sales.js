import React from 'react';
import { SaleContext } from '../../store/SaleContext';
import Saleapi from '../../Api/Saleapi';
import SaleList from './SaleList';

const Sales = () => {
    const { sales } = React.useContext(SaleContext)

    return (
        <div className="container">
            <table className="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">pro_name</th>
                        <th scope="col">product_id</th>
                        <th scope="col">amount</th>
                        <th scope="col">total</th>
                        <th scope="col">saleprice</th>
                    </tr>
                </thead>
                {sales.map((item, id) => {
                    return <SaleList key={id} {...item} />
                })}
            </table>
        </div>
    )
}

export default Sales
