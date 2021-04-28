import React, { useState, useEffect } from 'react';
import { SaleContext } from '../../store/SaleContext';

const Form = () => {
    const { createSale, sales } = React.useContext(SaleContext);
    console.log("🚀 ~ file: Form.js ~ line 6 ~ Form ~ sales", sales)
    const [drug_id, setDrug_id] = useState('')
    const [amount, setAmount] = useState(1)

    const addSale = e => {
        // e.preventDefault();
        const sales = {
            drug_id,
            amount
        }
        createSale(sales);
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
                    onChange={(e) => setDrug_id(e.target.value)}
                />
                <input
                    type="text"
                    name="amount"
                    id="amount"
                    className="form-control"
                    aria-describedby="button-addon2"
                    placeholder="Barcode"
                    value={amount}
                    onChange={(e) => setAmount(e.target.value)}
                />
                <div className="input-group-append">
                    <button className="btn btn-outline-secondary" type="submit" id="button-addon2">Create</button>
                </div>
            </div>
        </form>
    )
}

export default Form
        // setSales([...sales, { drug_id: textInput, amount: 1 }])
