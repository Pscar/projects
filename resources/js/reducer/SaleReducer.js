export const SaleReducer = (state, action) => {
    switch (action.type) {
        case 'CREATE_SALE':
            return { ...state, sales: action.payload, loading: false }

        case 'LOADING':
            return { ...state, loading: true }
        case 'FETCH_SUCCESS':
            return {
                sales: action.payload
            }
        default: return state;
    }
}
