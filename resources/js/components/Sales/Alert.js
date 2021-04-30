import React, { useEffect } from 'react'

const Alert = ({ type, msg, removeAlert, sales }) => {
    useEffect(() => {
        const timeout = setTimeout(() => {
            removeAlert();
        }, 3000);
        return () => clearTimeout(timeout);
    }, [sales]);
    return <p className={`alert alert-${type}`}>{msg}</p>;
};

export default Alert
