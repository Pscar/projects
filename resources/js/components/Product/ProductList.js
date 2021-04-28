import React from 'react'

const ProductList = ({ name, id, info, glass }) => {
    return (
        <tbody>
            <tr>
                <th scope="row">{id}</th>
                <td>{name}</td>
                <td>{info}</td>
                <td>{glass}</td>
            </tr>
        </tbody>
    )
}

export default ProductList
