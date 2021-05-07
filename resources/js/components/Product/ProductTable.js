import React from 'react';
import { SaleContext } from '../../store/SaleContext';
import { ProductContext } from '../../store/ProductContext';
import DataTable from '@bit/adeoy.utils.data-table';
import "bootstrap/dist/css/bootstrap.min.css";

const ProductTable = () => {
    const { products } = React.useContext(ProductContext);
    const { createSale } = React.useContext(SaleContext);
    console.log("🚀 ~ file: ProductTable.js ~ line 10 ~ ProductTable ~ products", products)

    const columns = [
        { title: "#", data: "id" },
        { title: "ชื่อยา", data: "pro_name" },
        { title: 'บาร์โค้ด', format: (row) => <strong>{row.drug_id}</strong> },
        { title: 'บรรจุ', format: (row) => <em>{row.contain}</em> },
        { title: "ราคาขาย", data: "saleprice" },
        { title: "Actions", format: (row) => <button type="button" className="btn btn-success" onClick={() => createSale()}>เลือก</button> }
    ];
    const click = (row) => {
        console.log(row);
    };


    return (
        <div>
            <DataTable
                data={products}
                columns={columns}
                striped={true}
                hover={true}
                responsive={true}
                onClickRow={click}
            />
        </div>
    )
}

export default ProductTable
