
export const initialState = {
    sales: [],
}
export const SaleReducer = (state, action) => {
    switch (action.type) {
        case 'CREATE_SALE':
            return {
                ...state,
                sales: [...state.sales, action.payload]
            }
        case 'FETCH_SUCCESS':
            return {
                sales: action.payload
            }
        default: return state;
    }
}
