import { Inter } from 'next/font/google'
import './globals.css'

const inter = Inter({ subsets: ['latin'] })

export const metadata = {
  title: 'Pizza & Burger Shop - Delicious Food Delivered',
  description: 'Order delicious pizzas, burgers, and more from our restaurant. Fast delivery and great taste guaranteed!',
}

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body className={inter.className}>
        {children}
      </body>
    </html>
  )
} 