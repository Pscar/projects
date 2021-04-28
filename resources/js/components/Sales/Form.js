import React, { useState, useEffect } from 'react';
// import { useHistory } from 'react-router-dom';
import { SaleContext } from '../../store/SaleContext';
import Saleapi from '../../Api/Saleapi';

const Form = () => {
    const { createSale, sales } = React.useContext(SaleContext);
    console.log("🚀 ~ file: Form.js ~ line 8 ~ Form ~ sales", sales)
    const [drug_id, setDrug_id] = useState('')

    const addSaleChange = e => {
        setDrug_id(e.target.value)
    }
    const addSale = async event => {
        event.preventDefault();
        const saleNew = {
            drug_id,
        }
        createSale(saleNew);
        // setSales([...sales, { drug_id: textInput, amount: 1 }])
        setDrug_id('');
    }
    const BarcodeInput = React.useRef();

    useEffect(() => {
        BarcodeInput.current.focus();
    }, [])


    return (
        <form className="form" autoComplete="off" onSubmit={addSale}>
            <div className="input-group mb-3">
                <input
                    type="text"
                    name="drug_id"
                    id="drug_id"
                    ref={BarcodeInput}
                    className="form-control"
                    aria-describedby="button-addon2"
                    placeholder="Barcode"
                    value={drug_id}
                    onChange={addSaleChange}
                />
                <input
                    type="text"
                    name="amount"
                    id="amount"
                    className="form-control"
                    aria-describedby="button-addon2"
                    placeholder="Barcode"
                    value="1"
                    onChange={addSaleChange}
                />
                <div className="input-group-append">
                    <button className="btn btn-outline-secondary" type="submit" id="button-addon2">Create</button>
                </div>
            </div>
        </form>
    )
}

export default Form
