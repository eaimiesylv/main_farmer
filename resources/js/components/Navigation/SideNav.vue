<template>  
   <nav>
        <ul class="nav-links">
            <!--<li><i class="fas fa-home"></i> Home</li>-->
            <li><router-link to="/"><i class="fas fa-tachometer-alt"></i> Dashboard</router-link></li>
            <li><i class="fas fa-file-alt"></i> Pitch</li>
            <li>
                <i class="fas fa-users"></i> Investors <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><i class="fas fa-user"></i> Investor</li>
                    <li><i class="fas fa-users"></i> Investor groups</li>
                </ul>
            </li>
            <li>
                <i class="fas fa-briefcase"></i> Deals <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><i class="fas fa-file"></i> All deals</li>
                    <li><i class="fas fa-chart-line"></i> Pipelines</li>
                    <li><i class="fas fa-tasks"></i> Pipeline view</li>
                </ul>
            </li>
            <li><i class="fas fa-file-invoice"></i> Invoices</li>
            <li>
                <i class="fas fa-file-signature"></i> Proposals <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><i class="fas fa-list"></i> Proposal list</li>
                    <li><i class="fas fa-file-alt"></i> Templates</li>
                </ul>
            </li>
            <li>
                <i class="fas fa-tasks"></i> Activities <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><i class="fas fa-calendar-alt"></i> Calendar View</li>
                    <li><i class="fas fa-list-alt"></i> Activity list</li>
                </ul>
            </li>
            <li>
                <i class="fas fa-money-bill"></i> Expenses <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><i class="fas fa-coins"></i> Expenses</li>
                    <li><i class="fas fa-map-marker-alt"></i> Area of Expenses</li>
                </ul>
            </li>
            <li>
                <i class="fas fa-chart-bar"></i> Report <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><i class="fas fa-chart-line"></i> Deals</li>
                    <li><i class="fas fa-file-alt"></i> Proposal</li>
                    <li><i class="fas fa-tasks"></i> Pipeline</li>
                </ul>
            </li>
            <li><i class="fas fa-users-cog"></i> Users & Roles</li>
            <li><i class="fas fa-cog"></i> Settings</li>
            
        </ul>
    </nav>
</template>