import React from 'react';

const SaleList = ({ sales, removeSale, isEditing }) => {
    return (
        <div>
            <table className="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">pro_name</th>
                        {/* <th scope="col">amount</th>
                    <th scope="col">total</th> */}
                        <th scope="col">saleprice</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                {sales.map((items) => {
                    return (
                        <tbody key={items.id}>
                            <tr>
                                <th scope="row">{items.drug_id}</th>
                                <td>{items.pro_name}</td>
                                <td>{items.saleprice}</td>
                                <td>
                                    {isEditing ?
                                        <button type="button" className="btn btn-primary">
                                            submit
                                        </button> :
                                        <button type="button" className="btn btn-warning">
                                            edit
                                        </button>
                                    }
                                </td>
                                <td>
                                    <button type="button" className="btn btn-danger" onClick={() => removeSale(items.id)}>
                                        remove
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    );
                })}
            </table>
        </div>

    )
}

export default SaleList
