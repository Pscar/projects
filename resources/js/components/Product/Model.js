import React, { useState, useEffect, useRef } from 'react';
import { SaleProvider } from '../../store/SaleContext';
import { Modal } from 'bootstrap'
import ProductTable from './ProductTable';


const Model = () => {
    const [modal, setModal] = useState(null)
    const exampleModal = useRef()

    useEffect(() => {
        setModal(
            new Modal(exampleModal.current)
        )
    }, [])
    return (
        <SaleProvider>
            <button type="button" onClick={() => modal.show()} className="btn btn-primary">
                เพิ่มรายการขาย
            </button>
            <div className="modal fade" ref={exampleModal} tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div className="modal-dialog modal-xl">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5 className="modal-title" id="exampleModalLabel">เพิ่มรายการขาย</h5>
                            <button type="button" className="btn btn-secondary" onClick={() => modal.hide()} aria-label="Close">X</button>
                        </div>
                        <div className="modal-body">
                            <ProductTable />
                        </div>
                        {/* <div className="modal-footer">
                            <button type="button" className="btn btn-secondary" onClick={() => modal.hide()}>Close</button>
                            <button type="button" className="btn btn-primary">Save changes</button>
                        </div> */}
                    </div>
                </div>
            </div>
        </SaleProvider >
    )
}

export default Model
