from flask import Flask, request, jsonify
import datetime
import pytz
import os

app = Flask(__name__)

@app.route('/get_info', methods=['GET'])
def get_info():
    # Get query parameters
    slack_name = request.args.get('Ahmed_Bukar', '')
    track = request.args.get('Backend', '')

    # Get current day of the week
    current_day = datetime.datetime.now().strftime('%A')

    # Get current UTC time with validation of +/-2 hours
    utc_time = datetime.datetime.now(pytz.UTC)
    utc_offset = utc_time.utcoffset().total_seconds() / 3600  # Convert to hours
    utc_time_str = utc_time.strftime('%Y-%m-%dT%H:%M:%SZ')

    # Get GitHub URL of the file being run
    github_file_url = "https://github.com/yerwahub/HGN360/blob/master/HNGx.py"

    # Get GitHub URL of the full source code
    github_source_url = "https://github.com/yerwahub/HNG360"

    # Status Code of Success
    status_code = 200

    # Create JSON response
    response_data = {
        "slack_name": slack_name,
        "current_day": current_day,
        "current_utc_time": utc_time_str,
        "track": track,
        "github_file_url": github_file_url,
        "github_source_url": github_source_url,
        "status_code": status_code
    }

    return jsonify(response_data)

if __name__ == '__main__':
    app.run(debug=True)
