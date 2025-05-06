from selenium import webdriver
from selenium.webdriver.common.by import By
import time

driver = webdriver.Chrome()


driver.get("C:/Users/bruno_vitor-santos/Documents/GitHub/BrunoVitor_DESN_Sistemas_Tarde/index.html")

nome_input = driver.find_element(By.ID, "name")
nome_input.send_keys("Bruno Vitor dos Santos")

cpf_input = driver.find_element(By.ID, "cpf")
cpf_input.send_keys("12345678901")

endereco_input = driver.find_element(By.ID, "address")
endereco_input.send_keys("Rua das Flores, 123")

telefone_input = driver.find_element(By.ID, "phone")
telefone_input.send_keys("11987654321")

submit_button = driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
submit_button.click()

time.sleep(3)

driver.quit()
