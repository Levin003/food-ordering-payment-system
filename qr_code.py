import qrcode

# Define a function to generate QR codes for tables
def generate_table_qr_code(table_number):
    qr = qrcode.QRCode(
        version=1,
        error_correction=qrcode.constants.ERROR_CORRECT_L,
        box_size=10,
        border=4,
    )
    # Customize the data to encode (e.g., table number)
    qr.add_data(f"Table {table_number}")
    qr.make(fit=True)
    img = qr.make_image(fill_color="black", back_color="white")
    return img

# Example: Generate QR code for Table 1
table1_qr_code = generate_table_qr_code(1)
table1_qr_code.save("table1_qr_code.png")
