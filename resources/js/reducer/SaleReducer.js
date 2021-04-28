
export default (state, action) => {
    switch (action.type) {
        case 'CREATE_SALE':
            return {
                ...state,
                sales: [...state.sales, action.payload]
            }
        default: return state;
    }
}
