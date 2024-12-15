const SessionManager = {
    initializeToken: function() {
        sessionStorage.setItem('tokens', JSON.stringify({ tokens: 6 }));
    },

    decreaseToken: function() {
        const tokensData = sessionStorage.getItem('tokens');
        if (tokensData) {
            const parsedTokens = JSON.parse(tokensData); 
            if (parsedTokens.tokens > 0) { 
                parsedTokens.tokens -= 1;
                sessionStorage.setItem('tokens', JSON.stringify(parsedTokens));
            } else {
                console.warn('No tokens left to decrease.');
            }
        } else {
            console.error('Tokens not initialized. Call initializeToken first.');
        }
    },

    getToken: function() {
        const tokensData = sessionStorage.getItem('tokens');
        return tokensData ? JSON.parse(tokensData).tokens : null; // Return the token count or null
    },

    saveUserInfo: function(userInfo) {
        sessionStorage.setItem('userInfo', JSON.stringify(userInfo));
    },

    getUserInfo: function() {
        const userInfo = sessionStorage.getItem('userInfo');
        return userInfo ? JSON.parse(userInfo) : null; // Return the user info or null
    },

    isLoggedIn: function() {
        return sessionStorage.getItem('userInfo') !== null;
    },

    logout: function() {
        sessionStorage.removeItem('userInfo');
        window.location.href = 'login.html';
    },

    requireLogin: function() {
        if (!this.isLoggedIn()) {
            window.location.href = 'login.html';
        }
    }
};

window.SessionManager = SessionManager;
