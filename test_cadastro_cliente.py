from selenium import webdriver
from selenium.webdriver.common.by import By
import time

driver = webdriver.Chrome()


driver.get("C:/Users/bruno_vitor-santos/Documents/GitHub/BrunoVitor_DESN_Sistemas_Tarde/index2.html")

nome_input = driver.find_element(By.ID, "codigo")
nome_input.send_keys("123")

time.sleep(0.6)

cpf_input = driver.find_element(By.ID, "desc")
cpf_input.send_keys("Caro e ruim")

time.sleep(0.6)

endereco_input = driver.find_element(By.ID, "marca")
endereco_input.send_keys("loui")

time.sleep(0.6)

telefone_input = driver.find_element(By.ID, "preco")
telefone_input.send_keys("120")

time.sleep(0.6)

telefone_input = driver.find_element(By.ID, "quant")
telefone_input.send_keys("12")

time.sleep(0.6)

submit_button = driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
submit_button.click()

time.sleep(3)

driver.quit()
