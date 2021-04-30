import React, { useState, useEffect } from 'react';
import { SaleContext } from '../../store/SaleContext';
import SaleList from './SaleList';
import Alert from './Alert';

const Sales = () => {
    const { sales, createSale, removeSale } = React.useContext(SaleContext)
    console.log("🚀 ~ file: Sales.js ~ line 7 ~ Sales ~ sales", sales)
    const [drug_id, setDrug_id] = useState('')
    const [amount, setAmount] = useState(1)
    const [alert, setAlert] = useState({ show: false, msg: '', type: '' });
    const [isEditing, setIsEditing] = useState(false);

    const showAlert = (show = false, msg = "", type = "") => {
        setAlert({ show, type, msg })
    }
    const addSale = () => {
        if (!drug_id) {
            showAlert(true, 'danger', 'please enter value')
        } else {
            showAlert(true, 'success', 'item added to the list');
            const sales = {
                drug_id,
                amount
            }
            createSale(sales);
            setDrug_id('');
        }

    }

    const BarcodeInput = React.useRef();

    useEffect(() => {
        BarcodeInput.current.focus();
    }, [])
    return (
        <div className="container">
            <form className="form" autoComplete="off" onSubmit={addSale}>
                {alert.show && <Alert {...alert} removeAlert={showAlert} items={sales} />}
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
            {sales.length > 0 && (
                <SaleList sales={sales} removeSale={removeSale} isEditing={isEditing} />
            )}
        </div>
    )
}

export default Sales
