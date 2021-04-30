export const SaleReducer = (state, action) => {
    console.log("🚀 ~ file: SaleReducer.js ~ line 2 ~ SaleReducer ~ action", action)
    switch (action.type) {

        case 'CREATE_SALE':
            return { ...state, sales: action.payload, loading: false }

        // case 'EDIT_SALE':
        //     const editSale = action.payload;
        //     const editSale = state.sales.map((items) => {
        //         if (items.id === editSale.id) {
        //             return editSale
        //         }
        //         return items
        //     });

        case 'REMOVE_SALE':
            return { ...state, sales: state.sales.filter((items) => items.id !== action.payload) }

        case 'LOADING':
            return { ...state, loading: true }

        case 'FETCH_SUCCESS':
            return { ...state, sales: action.payload, loading: false }

        default: return state;
    }
}

