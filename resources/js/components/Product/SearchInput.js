import React, { useContext } from 'react';
import { ProductContext } from '../../store/ProductContext';
const SearchInput = () => {
    // const [product, setProduct] = useContext(ProductContext);
    const { setSearchTerm } = useContext(ProductContext);

    function handlSubmit(e) {
        e.preventDefault()
    }
    function SearchProduct() {
        setSearchTerm(searchInput.current.value)
    }
    const searchInput = React.useRef();
    React.useEffect(() => {
        searchInput.current.focus();
    }, [])

    return (
        <div className="container">
            <form className="form" autoComplete="off" onSubmit={handlSubmit}>
                <div className="input-group mb-3">
                    <input ref={searchInput}
                        type="text"
                        className="form-control"
                        placeholder="Search"
                        name="search"
                        id="search"
                        onChange={SearchProduct}
                        aria-describedby="button-addon2"
                    />
                    <div className="input-group-append">
                        <button className="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
        </div>
    )
}

export default SearchInput
