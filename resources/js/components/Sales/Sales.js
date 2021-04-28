import React from 'react';
import { SaleContext } from '../../store/SaleContext';
import Saleapi from '../../Api/Saleapi';
import SaleList from './SaleList';

const Sales = () => {
    const { sales, setSales, loadeing } = React.useContext(SaleContext)

    // const fetchData = () => {
    //     Saleapi.getAll()
    //         .then(response => {
    //             setSales(response.data);
    //             console.log(response.data);
    //         })
    //         .catch(e => {
    //             console.log(e);
    //         });
    // }

    // React.useEffect(() => {
    //     fetchData();
    // }, [])

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
                {/* {sales.map((item) => {
                    return <SaleList key={item.id} {...item} />
                })} */}
            </table>
        </div>
    )
}

export default Sales
