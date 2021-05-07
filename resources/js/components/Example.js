import React from 'react';
import ReactDOM from 'react-dom';
import { SaleProvider } from '../store/SaleContext';
import { ProductProvider } from '../store/ProductContext';
import Sales from './Sales/Sales';
import Model from './Product/Model';
import '../../css/app.css';
const Example = () => {
    return (
        <div className="container mt-5 mb-5">
            <ProductProvider>
                <Model />
            </ProductProvider>
        </div>
    );


}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
