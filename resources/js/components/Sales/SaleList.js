import React from 'react'

const SaleList = ({ drug_id, pro_name, product_id, amount, total, saleprice }) => {
    return (
        <tbody>
            <tr>
                <th scope="row">{drug_id}</th>
                <td>{pro_name}</td>
                <td>{product_id}</td>
                <td>{amount}</td>
                <td>{total}</td>
                <td>{saleprice}</td>
            </tr>
        </tbody>
    )
}

export default SaleList
