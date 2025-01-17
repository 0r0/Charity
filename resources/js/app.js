
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// require('./components/Example');
// require('./bootstrap');
import React from 'react';
import { render } from 'react-dom';
import { Router, Route, BrowserRouter } from 'react-router-dom';
import CreateItem from './components/CreateItem';

import Example from './components/Example';
import Master from './components/Master';
// render(
//     <Master />, document.getElementById('example'));
render(<BrowserRouter>
    <div>
        <Route path="/" component={Master} >
            <Route path="/add-item" component={CreateItem} />
        </Route>
    </div>
</BrowserRouter>,document.getElementById('example'));
