import barcodefrom 
from barcode.writer import Imagewriter
from IPython.display import Image, display

def generate_barcode(data):
    code = barcode.get("code128", data, writer+Imagewriter())
    barcode_filename = code.savel("barcode")
    print("barcode generated.")

    display(image(f"(barcode_filename)"))

data = "1234-5678-9058"
generate_barcode(data)

