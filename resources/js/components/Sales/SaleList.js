import React from 'react';

const SaleList = ({ sales, removeSale }) => {
    return (
        <table className="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">pro_name</th>
                    <th scope="col">product_id</th>
                    <th scope="col">amount</th>
                    <th scope="col">total</th>
                    <th scope="col">saleprice</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                {sales.map((items) => {
                    const { drug_id, pro_name, product_id, amount, total, saleprice, id } = items;
                    return (
                        <tr key={id}>
                            <th scope="row">{drug_id}</th>
                            <td>{pro_name}</td>
                            <td>{product_id}</td>
                            <td>{amount}</td>
                            <td>{total}</td>
                            <td>{saleprice}</td>
                            <td>
                                <button type="button" className="btn btn-danger" onClick={() => removeSale(id)}>
                                    remove
                                </button>
                            </td>
                        </tr>
                    );
                })}
            </tbody>
        </table>
    )
}

export default SaleList
