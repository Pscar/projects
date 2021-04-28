import React from 'react';
import { SaleProvider } from '../store/SaleContext';
import ReactDOM from 'react-dom';
import Sales from './Sales/Sales';
import Form from './Sales/Form';
// import Product from './Product/Product';
// import SearchInput from './Product/SearchInput';
import '../../css/app.css';
const Example = () => {
    return (
        <div className="container mt-5 mb-5">
            <SaleProvider>
                <Form />
                <Sales />
            </SaleProvider>
        </div>
    );


}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
