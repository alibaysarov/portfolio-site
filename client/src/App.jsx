import {useEffect, useState} from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import api from "./api/index.js";

function App() {
    const [works,setWorks] = useState([])
    console.log(works)
    useEffect(()=>{
        api.getWorks().then(data=>{
            setWorks(data);
            console.log(works)
        });
    },[])
  return (
    <>

    </>
  )
}

export default App
