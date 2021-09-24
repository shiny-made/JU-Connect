export default function Layout ({ children }) {
  return (
    <div className="container">
      <div className="app">
        {children}
      </div>
      <style jsx>{`
        .container {
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 2em;
          width: 100%;
          heigh: 120vh;
        }
        .app {
          min-width: 320px;
          backdrop-filter: blur(100px);
          background: black;
          border-radius: 14px;
        }
      `}</style>
      <style jsx global>{`
          :root {
            --active-color: white;
            --dark-bg: #14162b;
          }

          body {
            font-family: 'Poppins', sans-serif;
            background: #5d5c5e;
            background: -webkit-linear-gradient(to right, #1E1C1C, #5d5c5e, #1E1C1C);
            background: linear-gradient(to right, #1E1C1C, #5d5c5e, #1E1C1C);
            color: var(--active-color);
          }

          * {
            box-sizing: border-box;
          }
        `}</style>
    </div>
  )
}